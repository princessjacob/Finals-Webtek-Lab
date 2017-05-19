from django.shortcuts import render
from django.http import Http404, HttpResponseRedirect
from .models import Customer, Complaints, Request, Reviewrating, ServiceProvider, Services, Ssp, Transaction
from .forms import UpdateForm, NewRequestForm, NewReviewForm, NewComplaintForm
from django.shortcuts import get_object_or_404
from django.core.urlresolvers import reverse


def dashboard(request):
    tran = Transaction.objects.all()
    req = Request.objects.all()
    return render(request,
                  'custModule/dashboard.html',
                 {'tran':tran, 'req':req},)

def appointment(request):
    tran = Transaction.objects.all()
    req = Request.objects.all()
    return render(request, 'custModule/appointment.html', {'tran':tran, 'req':req})

def request(request):
    req = Request.objects.all()
    return render(request, 'custModule/request.html',
                 {'req':req})

def review(request):
    rev = Reviewrating.objects.all()
    return render(request, 'custModule/review.html', {'rev':rev})

def transaction(request):
    tran = Transaction.objects.all()
    req = Request.objects.all()
    return render(request, 'custModule/transaction.html', {'tran':tran, 'req':req})

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
    else:
        form = Customer.objects.get(pk=1)
        update_form = UpdateForm(instance=customer)

    return render(request, 'custModule/edit.html', {'form': form, 'customer':customer})

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
    sp_data = ServiceProvider.objects.all()
    serv = Services.objects.all()

    return render(request,
                  'custModule/editrequest.html',
                  context={'sp_data': sp_data, 'serv': serv},
                 )

def newreview(request):
    if request.method == 'POST':
        form = NewReviewForm(request.POST)
        if form.is_valid():
            form.save()
            return HttpResponseRedirect('/review/')
    else:
        form = NewReviewForm()

    return render(request, 'custModule/newreview.html', {'form': form})

def listreview(request):
    rev = Reviewrating.objects.all()
    return render(request, 'custModule/listreview.html', {'rev':rev})

def complaint(request):
    if request.method == 'POST':
        form = NewComplaintForm(request.POST)
        if form.is_valid():
            form.save()
            return HttpResponseRedirect('/request/')
    else:
        form = NewComplaintForm()

    return render(request, 'custModule/complaint.html', {'form': form})

def listcomplaint(request):
    com = Complaints.objects.all()
    return render(request, 'custModule/listcomplaint.html', {'com':com})

def delete(request, custid):
    instance = Request.objects.get(custid=custid)
    instance.delete()
    return HttpResponseRedirect('/appointment/')
    return render(request, 'custModule/appointment.html', {{'instance':instance}})