//+------------------------------------------------------------------+
//|                                 ADX Cross Kulinane Manungsan.mq4 |
//|        Takis Malam Takis Siang Takis Sore Takis kot @SamJackhack |
//| Yen Looss Yooh Looss , Yen Profit Yooh Profit, Wes Ra Sah Rewel !|
//+------------------------------------------------------------------+
#property  copyright "Yen Looss Yooh Looss , Yen Profit Yooh Profit, Wes Ra Sah Rewel By Sam Jack"

#property indicator_chart_window
#property indicator_buffers 2
#property indicator_color1 Lime
#property indicator_color2 Red

//---- input parameters
extern int ADXbars=14;
extern int CountBars=350;
extern bool SoundON=true;
extern bool Advanced_Alert=true; // Advanced alert
extern string Advanced_Key="t-1356213586:23665";

#import "AdvancedNotificationsLib.dll"
void AdvancedAlert(string key, string text, string instrument, string timeframe);
#import

//---- buffers
double val1[];
double val2[];
int flagval1 = 0;
int flagval2 = 0;
double b4plusdi,nowplusdi,b4minusdi,nowminusdi;
extern int ShiftArrow = 1;
//+------------------------------------------------------------------+
//| Custom indicator initialization function                         |
//+------------------------------------------------------------------+
int init()
  {
//---- indicator line
   if (!IsDllsAllowed() && Advanced_Alert)
   {
      Print("Error: Dll calls must be allowed!");
      return INIT_FAILED;
   }
   IndicatorBuffers(2);
   SetIndexStyle(0,DRAW_ARROW);
   SetIndexArrow(0,108);
   SetIndexStyle(1,DRAW_ARROW);
   SetIndexArrow(1,108);
   SetIndexBuffer(0,val1);
   SetIndexBuffer(1,val2);
   SetIndexShift(0,ShiftArrow);
   SetIndexShift(1,ShiftArrow);
   GlobalVariableSet("AlertTime"+Symbol()+Period(),CurTime());
   GlobalVariableSet("SignalType"+Symbol()+Period(),OP_SELLSTOP);
//   GlobalVariableSet("LastAlert"+Symbol()+Period(),0);
//----
   return(0);
  }

int deinit()
{
   GlobalVariableDel("AlertTime"+Symbol()+Period());
   GlobalVariableDel("SignalType"+Symbol()+Period());
//   GlobalVariableDel("LastAlert"+Symbol()+Period());
   return(0);
}

//+------------------------------------------------------------------+
//| ADX Cross Kulinane Manungsan                                                    |
//+------------------------------------------------------------------+
int start()
  {
   double tmp=0;
      
   if (CountBars>=Bars) CountBars=Bars;
   if (CountBars>=1000) CountBars=950;
   SetIndexDrawBegin(0,Bars-CountBars + 12);
   SetIndexDrawBegin(1,Bars-CountBars + 12);
   int i,shift,counted_bars=IndicatorCounted();


   //---- check for possible errors
   if(counted_bars<0) return(-1);

   //---- initial zero
   if(counted_bars<1)
     {
      for(i=1;i<=CountBars;i++) val1[CountBars-i]=0.0;
      for(i=1;i<=CountBars;i++) val2[CountBars-i]=0.0;
     } 

   for (shift = CountBars; shift>=0; shift--) 
   { 

   	b4plusdi=iADX(NULL,0,ADXbars,PRICE_CLOSE,MODE_PLUSDI,shift-1);
	   nowplusdi=iADX(NULL,0,ADXbars,PRICE_CLOSE,MODE_PLUSDI,shift);
	   b4minusdi=iADX(NULL,0,ADXbars,PRICE_CLOSE,MODE_MINUSDI,shift-1);
	   nowminusdi=iADX(NULL,0,ADXbars,PRICE_CLOSE,MODE_MINUSDI,shift); 
      if (b4plusdi>b4minusdi && nowplusdi<nowminusdi)
      {
	      if (shift == 1 && flagval1==0){  flagval1=1; flagval2=0; }
	      val1[shift]=Low[shift]-1*Point;
      }
      if (b4plusdi<b4minusdi && nowplusdi>nowminusdi) 
      {
         if (shift == 1 && flagval2==0) { flagval2=1; flagval1=0; }
	      val2[shift]=High[shift]+1*Point;
      }
   }
   if (flagval1==1 && CurTime() > GlobalVariableGet("AlertTime"+Symbol()+Period()) && GlobalVariableGet("SignalType"+Symbol()+Period())!=OP_BUY)
   if (val1[shift]==Low[shift])
   {
        if (SoundON) Alert("Jare ADX Bakal Buy", "\n Symbol=", Symbol(), "/", Period());
        if (Advanced_Alert && Advanced_Key != "")
      AdvancedAlert(Advanced_Key, "Jare ADX Bakal Munggah Utowo BUY Ojo All In Lee MARAI KERE", Symbol(), Period());
      tmp = CurTime() + (Period()-MathMod(Minute(),Period()))*60;
      GlobalVariableSet("AlertTime"+Symbol()+Period(),tmp);
      GlobalVariableSet("SignalType"+Symbol()+Period(),OP_SELL);
   }
   if (flagval2==1 && CurTime() > GlobalVariableGet("AlertTime"+Symbol()+Period()) && GlobalVariableGet("SignalType"+Symbol()+Period())!=OP_SELL)
   if (val2[shift]==High[shift])
    {
        if (SoundON) Alert("Jare ADX Bakal Sell", "\n Symbol", Symbol(), "/", Period());
        if (Advanced_Alert && Advanced_Key != "")
      AdvancedAlert(Advanced_Key, "Jare ADX Bakal Mudun Utowo SELL Ojo All In Lee MARAI KERE", Symbol(), Period());
      tmp = CurTime() + (Period()-MathMod(Minute(),Period()))*60;
      GlobalVariableSet("AlertTime"+Symbol()+Period(),tmp);
      GlobalVariableSet("SignalType"+Symbol()+Period(),OP_BUY);
   }
   return(0);
  }
//+------------------------------------------------------------------+