void setup() {
  Serial.begin(9600); //시리얼 모니터를 시작합니다.
  pinMode(13,OUTPUT);
}

void loop() {
  int level = digitalRead(2);  // 수분센서의 신호를 측정합니다.
  Serial.println(level);   //시리얼 모니터에 값을 출력합니다.
  
  if(level == HIGH)      //수위센서에 액체가 감지되면,
    digitalWrite(13,HIGH);  //13번 핀에 HIGH를 출력합니다(LED점등)
  else                   //그렇지 않으면,
    digitalWrite(13,LOW);   //13번 핀에 LOW를 출력합니다(LED소등)
}
