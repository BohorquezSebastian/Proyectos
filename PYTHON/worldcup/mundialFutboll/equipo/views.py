from django.shortcuts import render

# equipo/views.py

from django.urls import reverse_lazy
from django.views.generic import ListView, DetailView, CreateView, UpdateView, DeleteView
from .models import Equipo
from .forms import EquipoForm  # Importa el formulario que creaste

# Vista para listar equipos
class EquipoListView(ListView):
    model = Equipo
    template_name = 'equipos/equipo_list.html'
    context_object_name = 'equipos'

# Vista para el detalle de un equipo
class EquipoDetailView(DetailView):
    model = Equipo
    template_name = 'equipos/equipo_detail.html'

# Vista para crear un equipo
class EquipoCreateView(CreateView):
    model = Equipo
    form_class = EquipoForm  # Usa el formulario de equipo
    template_name = 'equipos/equipo_form.html'
    success_url = reverse_lazy('equipo-list')

# Vista para actualizar un equipo
class EquipoUpdateView(UpdateView):
    model = Equipo
    form_class = EquipoForm  # Usa el formulario de equipo
    template_name = 'equipos/equipo_form.html'
    success_url = reverse_lazy('equipo-list')

# Vista para eliminar un equipo
class EquipoDeleteView(DeleteView):
    model = Equipo
    template_name = 'equipos/equipo_confirm_delete.html'
    success_url = reverse_lazy('equipo-list')
