# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey has `on_delete` set to the desired behavior.
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from __future__ import unicode_literals

from django.db import models


class Customer(models.Model):
    custid = models.AutoField(db_column='custID', primary_key=True)  # Field name made lowercase.
    custlastname = models.CharField(db_column='custLastName', max_length=45)  # Field name made lowercase.
    custfirstname = models.CharField(db_column='custFirstName', max_length=45)  # Field name made lowercase.
    custemail = models.CharField(db_column='custEmail', max_length=45)  # Field name made lowercase.
    custpassword = models.CharField(db_column='custPassword', max_length=16)  # Field name made lowercase.
    custadd = models.CharField(db_column='custAdd', max_length=45)  # Field name made lowercase.
    custzip = models.CharField(db_column='custZip', max_length=45)  # Field name made lowercase.
    custnum = models.CharField(db_column='custNum', max_length=45)  # Field name made lowercase.
    custabout = models.CharField(db_column='custAbout', max_length=1000)  # Field name made lowercase.
    custphoto = models.TextField(db_column='custPhoto', blank=True, null=True)  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'customer'
        
    def __iter__(self):
        return [ self.custid,
                 self.custpassword,
                 self.custlastname,
                 self.custfirstname,
                 self.custemail,
                 self.custadd,
                 self.custabout,
                 self.custphoto,
                 self.custnum ]


class DjangoMigrations(models.Model):
    app = models.CharField(max_length=255)
    name = models.CharField(max_length=255)
    applied = models.DateTimeField()

    class Meta:
        managed = False
        db_table = 'django_migrations'


class Petlist(models.Model):
    petid = models.IntegerField(db_column='petID', primary_key=True)  # Field name made lowercase.
    type = models.CharField(max_length=3, blank=True, null=True)
    breed = models.CharField(max_length=45)

    class Meta:
        managed = False
        db_table = 'petlist'
        
    def __iter__(self):
        return [
            self.type,
            self.breed
        ]


class Petowner(models.Model):
    owner = models.IntegerField(primary_key=True)
    pet = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'petowner'
        unique_together = (('owner', 'pet'),)
        
    def __iter__(self):
        return [
            self.pet,
            self.owner
        ]


class Request(models.Model):
    reqid = models.AutoField(db_column='reqID', primary_key=True)  # Field name made lowercase.
    reqstatus = models.CharField(db_column='reqStatus', max_length=45)  # Field name made lowercase.
    custid = models.ForeignKey(Customer, models.DO_NOTHING, db_column='custId')  # Field name made lowercase.
    sp = models.ForeignKey('ServiceProvider', models.DO_NOTHING)

    class Meta:
        managed = False
        db_table = 'request'
        
    def __iter__(self):
        return [
            self.reqstatus,
            self.reqdets
        ]


class Reviewrating(models.Model):
    rr = models.ForeignKey('ServiceProvider', models.DO_NOTHING, db_column='rr_ID', primary_key=True)  # Field name made lowercase.
    revdets = models.CharField(db_column='revDets', max_length=45)  # Field name made lowercase.
    rating = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'reviewrating'
        
    def __iter__(self):
        return [
            self.rr,
            self.revdets,
            self.rating
        ]


class ServiceProvider(models.Model):
    spid = models.AutoField(db_column='spID', primary_key=True)  # Field name made lowercase.
    spusername = models.CharField(db_column='spUsername', max_length=45)  # Field name made lowercase.
    splastname = models.CharField(db_column='spLastName', max_length=45)  # Field name made lowercase.
    spfirstname = models.CharField(db_column='spFirstName', max_length=45)  # Field name made lowercase.
    spemail = models.CharField(db_column='spEmail', max_length=45)  # Field name made lowercase.
    sppassword = models.CharField(db_column='spPassword', max_length=16)  # Field name made lowercase.
    spadd = models.CharField(db_column='spAdd', max_length=45)  # Field name made lowercase.
    spnum = models.CharField(db_column='spNum', max_length=45)  # Field name made lowercase.
    sppet = models.CharField(db_column='spPet', max_length=4)  # Field name made lowercase.
    spzip = models.IntegerField(db_column='spZip')  # Field name made lowercase.
    splastlogged = models.DateField(db_column='spLastLogged', blank=True, null=True)  # Field name made lowercase.
    spstatus = models.CharField(db_column='spStatus', max_length=10)  # Field name made lowercase.
    spservices = models.CharField(db_column='spServices', max_length=45)  # Field name made lowercase.
    spday = models.CharField(db_column='spDay', max_length=10)  # Field name made lowercase.
    sptime = models.TimeField(db_column='spTime')  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'service_provider'
        
    def __iter__(self):
        return [ self.splastname,
                 self.spfirstname,
                 self.spemail,
                 self.sppasword,
                 self.spadd,
                 self.spnum,
                 self.sppet,
                 self.spzip,
                 self.splastlogged,
                 self.spstatus,
                 self.spservices,
                 self.spday,
                 self.sptime ]


class Services(models.Model):
    servid = models.AutoField(db_column='servID', primary_key=True)  # Field name made lowercase.
    servname = models.CharField(db_column='servName', max_length=45)  # Field name made lowercase.
    servprice = models.IntegerField(db_column='servPrice')  # Field name made lowercase.
    servimage = models.TextField(db_column='servImage')  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'services'
        
    def __iter__(self):
        return [
            self.servid,
            self.servname,
            self.servprice
        ]


class Ssp(models.Model):
    servid = models.ForeignKey(ServiceProvider, models.DO_NOTHING, db_column='servID', primary_key=True)  # Field name made lowercase.
    spid = models.IntegerField(db_column='spID')  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'ssp'
        unique_together = (('servid', 'spid'),)
        
    def __iter__(self):
        return [
            self.servid,
            self.spid
        ]


class Transaction(models.Model):
    trans = models.ForeignKey(ServiceProvider, models.DO_NOTHING, db_column='trans_ID', primary_key=True)  # Field name made lowercase.
    transstatus = models.CharField(db_column='transStatus', max_length=45)  # Field name made lowercase.
    transdate = models.DateField(db_column='transDate')  # Field name made lowercase.
    timestart = models.CharField(db_column='timeStart', max_length=45)  # Field name made lowercase.
    timein = models.CharField(db_column='timeIn', max_length=45)  # Field name made lowercase.
    payment = models.IntegerField()
    paystatus = models.CharField(db_column='payStatus', max_length=45)  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'transaction'
        
    def __iter__(self):
        return [
            self.trans,
            self.transstatus,
            self.transdate,
            self.timestart,
            self.timein,
            self.payment,
            self.paystatus
        ]
