# equipo/urls.py

from django.urls import path
from .views import EquipoListView, EquipoDetailView, EquipoCreateView, EquipoUpdateView, EquipoDeleteView

urlpatterns = [
    path('equipos/', EquipoListView.as_view(), name='equipo-list'),
    path('equipos/<int:pk>/', EquipoDetailView.as_view(), name='equipo-detail'),
    path('equipos/nuevo/', EquipoCreateView.as_view(), name='equipo-create'),
    path('equipos/<int:pk>/editar/', EquipoUpdateView.as_view(), name='equipo-update'),
    path('equipos/<int:pk>/eliminar/', EquipoDeleteView.as_view(), name='equipo-delete'),
]
