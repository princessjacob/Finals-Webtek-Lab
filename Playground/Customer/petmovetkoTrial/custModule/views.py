from django.shortcuts import render
from django.http import HttpResponse, Http404
from .models import Customer, Petlist, Petowner, Request, Reviewrating, ServiceProvider, Services, Ssp, Transaction


def dashboard(request):
    return render(request, 'custModule/dashboard.html')

def appointment(request):
    return render(request, 'custModule/appointment.html')

def request(request):
    return render(request, 'custModule/request.html')

def review(request):
    return render(request, 'custModule/review.html')

def transaction(request):
    return render(request, 'custModule/transaction.html')

def profile(request):
    data = Customer.objects.all()
    return render(
        request,
        'custModule/profile.html',
        context={'data': data},
        )

def edit(request):
    data = Customer.objects.all()
    return render(
        request,
        'custModule/edit.html',
        context={'data': data},
        )

def newrequest(request):
    data = Petlist.objects.all().distinct('type')
    sp_data = ServiceProvider.objects.all()
    serv = Services.objects.all()
    
    return render(request,
                  'custModule/newrequest.html',
                  context={'data': data, 'sp_data': sp_data, 'serv': serv},
                 )
def editrequest(request):
    data = Petlist.objects.all().distinct('type')
    sp_data = ServiceProvider.objects.all()
    serv = Services.objects.all()
    
    return render(request,
                  'custModule/editrequest.html',
                  context={'data': data, 'sp_data': sp_data, 'serv': serv},
                 )

def newreview(request):
    return render(request, 'custModule/newreview.html')

def listreview(request):
    return render(request, 'custModule/listreview.html')

### Views from Database

