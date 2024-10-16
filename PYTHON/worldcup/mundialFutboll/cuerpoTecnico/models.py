from django.db import models
from equipo.models import Equipo

class CuerpoTecnico(models.Model):
    ROLES = [
        ('Técnico', 'Técnico'),
        ('Asistente', 'Asistente'),
        ('Médico', 'Médico'),
        ('Preparador Físico', 'Preparador Físico'),
    ]

    nombre = models.CharField(max_length=50)
    apellido = models.CharField(max_length=50)
    foto = models.ImageField(upload_to='static/images/cuerpoTecnico/')
    fecha_nacimiento = models.DateField()
    nacionalidad = models.CharField(max_length=50)
    rol = models.CharField(max_length=20, choices=ROLES)
    equipo = models.ForeignKey(Equipo, on_delete=models.CASCADE)

    def __str__(self):
        return f'{self.nombre} {self.apellido} ({self.rol})'
