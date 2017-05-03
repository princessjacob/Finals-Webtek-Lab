from django.conf.urls import url, include
from . import views

urlpatterns = [
    url(r'^$', views.dashboard, name="dashboard"),
    url(r'^request/$', views.request, name="request"),
    url(r'^appointment/$', views.appointment, name="appointment"),
    url(r'^transaction/$', views.transaction, name="transaction"),
    url(r'^review/$', views.review, name="review"),
    url(r'^profile/$', views.profile, name="profile"),
]
