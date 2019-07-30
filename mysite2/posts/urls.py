from django.conf.urls import url
from . import views
from django.urls import path

urlpatterns = [
    path('',views.index, name ='index'),
   # path('details/(?P<id>\d+)/$',views.details, name ='details')
    url(r'^details/(?P<id>\d+)/$',views.details, name ='details')

];