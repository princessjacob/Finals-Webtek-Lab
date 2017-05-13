from django import forms
from .models import Customer

#class NameForm(forms.Form):
#    your_name = forms.CharField(label='Your name', max_length=100)

class UpdateForm(forms.ModelForm):
    custlastname = forms.CharField(max_length=45)  # Field name made lowercase.
    custfirstname = forms.CharField(max_length=45)  # Field name made lowercase.
    custemail = forms.CharField(max_length=45)  # Field name made lowercase.
    custadd = forms.CharField(max_length=45)  # Field name made lowercase.
    custzip = forms.CharField(max_length=45)
    custnum = forms.CharField(max_length=45)  # Field name made lowercase.
    custabout = forms.CharField(max_length=1000)  # Field name made lowercase.

    class Meta:
        model = Customer
        exclude = ['custid','custphoto', 'custpassword']
