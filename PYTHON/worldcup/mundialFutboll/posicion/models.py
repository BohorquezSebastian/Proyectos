from django.db import models

class Posicion(models.Model):
    POSICIONES = [
        ('Portero', 'Portero'),
        ('Defensa Central', 'Defensa Central'),
        ('Lateral Derecho', 'Lateral Derecho'),
        ('Lateral Izquierdo', 'Lateral Izquierdo'),
        ('Mediocampista Defensivo', 'Mediocampista Defensivo'),
        ('Mediocampista Ofensivo', 'Mediocampista Ofensivo'),
        ('Extremo Derecho', 'Extremo Derecho'),
        ('Extremo Izquierdo', 'Extremo Izquierdo'),
        ('Delantero Centro', 'Delantero Centro'),
        ('Segundo Delantero', 'Segundo Delantero'),
    ]

    nombre = models.CharField(max_length=50, choices=POSICIONES)
    descripcion = models.TextField()

    def __str__(self):
        return self.nombre
