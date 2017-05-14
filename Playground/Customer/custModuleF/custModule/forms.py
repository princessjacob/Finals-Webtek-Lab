from django import forms
from .models import Customer, Complaints, Request, Reviewrating, ServiceProvider, Services, Ssp, Transaction

class UpdateForm(forms.ModelForm):
    custlastname = forms.CharField(max_length=45)  
    custfirstname = forms.CharField(max_length=45)  
    custemail = forms.CharField(max_length=45)  
    custadd = forms.CharField(max_length=45)  
    custzip = forms.CharField(max_length=45)
    custnum = forms.CharField(max_length=45)  
    custabout = forms.CharField(max_length=1000)

    class Meta:
        model = Customer
        exclude = ['custid', 'custpassword']
        
class NewRequestForm(forms.ModelForm):
    reqstatus = forms.CharField(required=False, widget=forms.HiddenInput(), initial='pending')
    class Meta:
        model = Request
        fields = '__all__'
        
class NewReviewForm(forms.ModelForm):
    class Meta:
        model = Reviewrating
        exclude = ['rrid']
        
class NewComplaintForm(forms.ModelForm):
    class Meta:
        model = Complaints
        exclude = ['compid']