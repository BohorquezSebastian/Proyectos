from django.http import HttpResponse
from django.shortcuts import render
from django.contrib.auth.views import LoginView



def index(request):
    return render(request, "index.html", {
        'message': 'Nuevo mensaje desde la vista'
    })
# views.py

class CustomLoginView(LoginView):
    template_name = 'registration/login.html'  # El template que personalizarás



# Vista para la página de Equipos
def equipos_view(request):
    return render(request, 'equipos.html')

# Vista para la página de Partidos
def partidos_view(request):
    return render(request, 'partidos.html')

# Vista para la página de Noticias
def noticias_view(request):
    return render(request, 'noticias.html')

# Vista para la Tabla de Posiciones
def tabla_view(request):
    return render(request, 'tabla.html')

# Vista para la Política de Privacidad
def privacidad_view(request):
    return render(request, 'privacidad.html')

# Vista para los Términos y Condiciones
def terminos_view(request):
    return render(request, 'terminos.html')

def equipoCrud(request):
    return render(request, 'equipo/inicioEquipo.html')

def crearEquipo(request):
    return render(request, 'equipo/crearEquipo.html')
