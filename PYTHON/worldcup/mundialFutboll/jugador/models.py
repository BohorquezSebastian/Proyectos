from django.db import models
from equipo.models import Equipo
from posicion.models import Posicion

class Jugador(models.Model):
    nombre = models.CharField(max_length=50)
    apellido = models.CharField(max_length=50)
    foto = models.ImageField(upload_to='static/images/jugadores/')
    fecha_nacimiento = models.DateField()
    posicion = models.ForeignKey(Posicion, on_delete=models.CASCADE)
    numero_camiseta = models.IntegerField()
    es_titular = models.BooleanField(default=False)
    equipo = models.ForeignKey(Equipo, on_delete=models.CASCADE)

    def __str__(self):
        return f'{self.nombre} {self.apellido}'
