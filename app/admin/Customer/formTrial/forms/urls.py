from django.conf.urls import url, include
from . import views

urlpatterns = [
    url(r'^$', views.index, name="index"),
    url(r'^thanks/$', views.thanks, name="thanks"),
    url(r'^edit/$', views.edit, name="edit"),

]
