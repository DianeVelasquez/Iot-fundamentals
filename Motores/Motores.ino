int ENA = 10;  // Habilita motor A (izquierdo)
int IN1 = 9;   // Dirección motor A
int IN2 = 6;   // Dirección motor A
int ENB = 11;  // Habilita motor B (derecho)
int IN3 = 10;  // Dirección motor B
int IN4 = 11;  // Dirección motor B

void setup() {
  Serial.begin(9600);
  pinMode(ENA, OUTPUT);
  pinMode(ENB, OUTPUT);
  pinMode(IN1, OUTPUT);
  pinMode(IN2, OUTPUT);
  pinMode(IN3, OUTPUT);
  pinMode(IN4, OUTPUT);

  Serial.println("Inicio de la secuencia de movimientos...");
}

void loop() {
  // 1) Avanzar 2s
  Serial.println("1) Avanzando 2 segundos...");
  digitalWrite(IN1, HIGH); digitalWrite(IN2, LOW);   // Motor izquierdo avanza
  digitalWrite(IN3, HIGH); digitalWrite(IN4, LOW);   // Motor derecho avanza
  analogWrite(ENA, 255); analogWrite(ENB, 255);
  delay(2000);

  // 2) Detener 1s
  Serial.println("2) Detenido 1 segundo...");
  detenerMotores();
  delay(1000);

  // 3) Retroceder 1s
  Serial.println("3) Retrocediendo 1 segundo...");
  digitalWrite(IN1, LOW); digitalWrite(IN2, HIGH);
  digitalWrite(IN3, LOW); digitalWrite(IN4, HIGH);
  analogWrite(ENA, 255); analogWrite(ENB, 255);
  delay(1000);

  // 4) Girar a la derecha 1s
  Serial.println("4) Girando a la derecha 1 segundo...");
  digitalWrite(IN1, HIGH); digitalWrite(IN2, LOW);   // Solo motor izquierdo avanza
  digitalWrite(IN3, LOW);  digitalWrite(IN4, LOW);   // Motor derecho detenido
  analogWrite(ENA, 255); analogWrite(ENB, 0);
  delay(1000);

  // 5) Detener 1s
  Serial.println("5) Detenido 1 segundo...");
  detenerMotores();
  delay(1000);

  // 6) Avanzar 1s
  Serial.println("6) Avanzando 1 segundo...");
  digitalWrite(IN1, HIGH); digitalWrite(IN2, LOW);
  digitalWrite(IN3, HIGH); digitalWrite(IN4, LOW);
  analogWrite(ENA, 255); analogWrite(ENB, 255);
  delay(1000);

  detenerMotores();
  Serial.println("Fin de secuencia");
  while(true); // Detener ejecución
}

void detenerMotores() {
  digitalWrite(IN1, LOW);
  digitalWrite(IN2, LOW);
  digitalWrite(IN3, LOW);
  digitalWrite(IN4, LOW);
  analogWrite(ENA, 0);
  analogWrite(ENB, 0);
}
