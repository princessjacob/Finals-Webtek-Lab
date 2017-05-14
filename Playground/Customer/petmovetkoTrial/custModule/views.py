from django.shortcuts import render
from django.http import Http404, HttpResponseRedirect
from .models import Customer, Complaints, Request, Reviewrating, ServiceProvider, Services, Ssp, Transaction
from .forms import UpdateForm, NewRequestForm


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
    customer = Customer.objects.get(pk=1)
    if request.method == 'POST':
        form = UpdateForm(request.POST, instance=customer)
        if form.is_valid():
            form.save()
            return HttpResponseRedirect('/profile/')

    # if a GET (or any other method) we'll create a blank form
    else:
        form = Customer.objects.get(pk=1)
        update_form = UpdateForm(instance=customer)

    return render(request, 'custModule/edit.html', {'form': form, 'customer':customer})
   
def thanks(request):
    return render(request, 'custModule/profile.html')

def newrequest(request):   
    if request.method == 'POST':
        form = NewRequestForm(request.POST)
        if form.is_valid():
            form.save()
            return HttpResponseRedirect('/request/')       
    else:
        form = NewRequestForm()
        
    return render(request, 'custModule/newrequest.html', {'form': form})

def editrequest(request):
    petType = Petlist.objects.values('type').distinct()
    petBreed = Petlist.objects.values('breed').distinct()
    sp_data = ServiceProvider.objects.all()
    serv = Services.objects.all()
    
    return render(request,
                  'custModule/editrequest.html',
                  context={'petType': petType, 'petBreed' : petBreed, 'sp_data': sp_data, 'serv': serv},
                 )

def newreview(request):
    return render(request, 'custModule/newreview.html')

def listreview(request):
    return render(request, 'custModule/listreview.html')

### Views from Database

