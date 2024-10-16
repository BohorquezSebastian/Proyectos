from django.contrib import admin
from .models import CuerpoTecnico

@admin.register(CuerpoTecnico)
class CuerpoTecnicoAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'apellido', 'rol', 'equipo')
