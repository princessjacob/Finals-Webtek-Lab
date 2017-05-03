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

