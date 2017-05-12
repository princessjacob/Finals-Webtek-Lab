from django.shortcuts import render
from django.http import HttpResponseRedirect
from .forms import CustomForm, UpdateForm
from .models import Customer

def index(request):
    if request.method == 'POST':
        form = CustomForm(request.POST)
        if form.is_valid():
            custlastname = request.POST.get('custlastname', '')
            custfirstname = request.POST.get('custfirstname', '')
            custemail = request.POST.get('custemail', '')
            custadd = request.POST.get('custadd', '')
            custzip = request.POST.get('custzip', '')
            custnum = request.POST.get('custnum', '')
            custabout = request.POST.get('custabout', '')
            cust_obj = Customer(custlastname=custlastname, custfirstname=custfirstname, custemail=custemail, custadd=custadd, custzip=custzip, custnum=custnum, custabout=custabout)
            cust_obj.save()
            return HttpResponseRedirect('/thanks/')

    # if a GET (or any other method) we'll create a blank form
    else:
        form = CustomForm()

    return render(request, 'forms\index.html', {'form': form})


def thanks(request):
    return render(request, 'forms\\thanks.html')

def edit(request):
    customer = Customer.objects.get(pk=1)
    data = Customer.objects.filter(pk=1)
    if request.method == 'POST':
        form = UpdateForm(request.POST, instance=customer)
        if form.is_valid():
            form.save()
            return HttpResponseRedirect('/thanks/')

    # if a GET (or any other method) we'll create a blank form
    else:
        form = Customer.objects.get(pk=1)
        update_form = UpdateForm(instance=customer)

    return render(request, 'forms\edit.html', {'form': form, 'data':data})

