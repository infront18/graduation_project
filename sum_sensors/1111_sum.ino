#include <Adafruit_Sensor.h>
#include <DHT.h>
#include <DHT_U.h>
#include <LiquidCrystal_I2C.h>        //tlcd
#include <Wire.h>                     //tlcd  

DHT mydht (2,DHT11);                          //온습도
LiquidCrystal_I2C mytlcd (0x27, 20, 4);        //tlcd

void setup() {
  pinMode (8, OUTPUT);   //RED
  pinMode (9, OUTPUT);     //GREEN
  pinMode (10, OUTPUT);    //BLUE
  pinMode(A1,INPUT);   //조도센서           
  //A0 수위센서연결
  
  Serial.begin(9600);
  mydht.begin();            //온습도 센서
  mytlcd.init();          //tlcd
  mytlcd.backlight();       //tlcd

 }

void loop() {
  digitalWrite (8, HIGH);    //red on
  digitalWrite (9, LOW);
  digitalWrite (10, LOW);
  delay (1000);

  digitalWrite (8, LOW);
  digitalWrite (9, HIGH);  //green on
  digitalWrite (10, LOW);
  delay (1000);

  digitalWrite (8, LOW);
  digitalWrite (9, LOW);
  digitalWrite (10, HIGH);   //Blue on
  delay (1000);

  digitalWrite (8, HIGH);     //on  전부 on하면 화이트
  digitalWrite (9, HIGH);    //on
  digitalWrite (10, HIGH);     //on
  delay (1000);

  digitalWrite (8, 0);         //turn off
  digitalWrite (9, 0);
  digitalWrite (10, 0);
  delay (1000);

  int temp = mydht.readTemperature();   //온습도 센서
  int humi = mydht.readHumidity();        //온습도 센서
  int suwi = analogRead(A0);  // 수분센서의 신호를 측정합니다.
  int jodo = A1;   // 조도센서 연결
  
  Serial.print ("Temp : ");   //온습도 센서
  Serial.print (temp);        //온습도 센서
  Serial.print ("    ");        //온습도 센서
  Serial.print ("Humi : ");     //온습도 센서
  Serial.println (humi);        //온습도 센서
  Serial.print ("Suwi : ");     //수분센서
  Serial.println (suwi);     //수분센서
  delay(1000); 

  jodo = analogRead(A1);  // 조도센서
  Serial.print("Jodo : ");    //조도센서
  Serial.println(jodo); //  조도센서
  Serial.println(" ");
  delay(1000);

  mytlcd.setCursor(1,0);          //temp
  mytlcd.print("Temp : ");
  mytlcd.setCursor(8,0);
  mytlcd.print (temp);
  
  mytlcd.setCursor(1,1);          //humi
  mytlcd.print("Humi : ");
  mytlcd.setCursor(8,1);
  mytlcd.print (humi);

  mytlcd.setCursor(1,2);        //suwi
  mytlcd.print("Suwi : ");
  mytlcd.setCursor(8,2);
  mytlcd.print (suwi);

  mytlcd.setCursor(1,3);        //jodo
  mytlcd.print("Jodo : ");
  mytlcd.setCursor(8,3);
  mytlcd.print (jodo);
  
}


  
  
