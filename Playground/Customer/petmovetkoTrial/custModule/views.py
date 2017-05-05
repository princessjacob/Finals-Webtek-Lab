from django.shortcuts import render

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
    return render(request, 'custModule/profile.html')

def edit(request):
    return render(request, 'custModule/edit.html')

def newrequest(request):
    return render(request, 'custModule/newrequest.html')

def newreview(request):
    return render(request, 'custModule/newreview.html')

def listreview(request):
    return render(request, 'custModule/listreview.html')
