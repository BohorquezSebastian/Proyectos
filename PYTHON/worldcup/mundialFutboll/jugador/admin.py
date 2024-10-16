from django.contrib import admin
from .models import Jugador

@admin.register(Jugador)
class JugadorAdmin(admin.ModelAdmin):
    list_display = ('nombre', 'apellido', 'numero_camiseta', 'es_titular', 'equipo')
