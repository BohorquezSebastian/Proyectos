"""
URL configuration for mundialFutboll project.

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/5.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from .views import CustomLoginView
from django.urls import path
from django.urls import path, include
from . import views

urlpatterns = [
    path('equipos/', views.equipos_view, name='equipos'),
    path('partidos/', views.partidos_view, name='partidos'),
    path('noticias/', views.noticias_view, name='noticias'),
    path('tabla/', views.tabla_view, name='tabla'),
    path('privacidad/', views.privacidad_view, name='privacidad'),
    path('terminos/', views.terminos_view, name='terminos'),
    path('login/', CustomLoginView.as_view(), name='login'),
    path('admin/', admin.site.urls),
    path('', include('equipo.urls')),
    path('', views.index, name='index'),
    path('equipoCrud',views.equipoCrud, name='equipoCrud'),
    path('equipoCrud/crear',views.crearEquipo, name='crearEquipo')
]