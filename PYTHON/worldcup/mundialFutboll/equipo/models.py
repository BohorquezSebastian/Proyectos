from django.db import models

class Equipo(models.Model):
    nombre = models.CharField(max_length=100)
    bandera = models.ImageField(upload_to='static/images/banderas/')
    escudo = models.ImageField(upload_to='static/images/escudos/')

    def __str__(self):
        return self.nombre
