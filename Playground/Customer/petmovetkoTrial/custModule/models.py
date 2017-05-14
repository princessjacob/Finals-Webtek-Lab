# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey has `on_delete` set to the desired behavior.
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from __future__ import unicode_literals

from django.db import models


class AuthGroup(models.Model):
    name = models.CharField(unique=True, max_length=80)

    class Meta:
        managed = False
        db_table = 'auth_group'


class AuthGroupPermissions(models.Model):
    group_id = models.IntegerField()
    permission_id = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'auth_group_permissions'
        unique_together = (('group_id', 'permission_id'),)


class AuthPermission(models.Model):
    name = models.CharField(max_length=255)
    content_type_id = models.IntegerField()
    codename = models.CharField(max_length=100)

    class Meta:
        managed = False
        db_table = 'auth_permission'
        unique_together = (('content_type_id', 'codename'),)


class AuthUser(models.Model):
    password = models.CharField(max_length=128)
    last_login = models.DateTimeField(blank=True, null=True)
    is_superuser = models.IntegerField()
    username = models.CharField(unique=True, max_length=150)
    first_name = models.CharField(max_length=30)
    last_name = models.CharField(max_length=30)
    email = models.CharField(max_length=254)
    is_staff = models.IntegerField()
    is_active = models.IntegerField()
    date_joined = models.DateTimeField()

    class Meta:
        managed = False
        db_table = 'auth_user'


class AuthUserGroups(models.Model):
    user_id = models.IntegerField()
    group_id = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'auth_user_groups'
        unique_together = (('user_id', 'group_id'),)


class AuthUserUserPermissions(models.Model):
    user_id = models.IntegerField()
    permission_id = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'auth_user_user_permissions'
        unique_together = (('user_id', 'permission_id'),)


class Complaints(models.Model):
    compid = models.AutoField(db_column='compID', primary_key=True)  # Field name made lowercase.
    compmessage = models.CharField(db_column='compMessage', max_length=100)  # Field name made lowercase.
    compdate = models.DateTimeField(db_column='compDate')  # Field name made lowercase.
    spid = models.ForeignKey('ServiceProvider', models.DO_NOTHING, db_column='spID')  # Field name made lowercase.
    custid = models.ForeignKey('Customer', models.DO_NOTHING, db_column='custID')  # Field name made lowercase.
    complainer = models.CharField(max_length=5)

    class Meta:
        managed = False
        db_table = 'complaints'


class Customer(models.Model):
    custid = models.AutoField(db_column='custID', primary_key=True)  # Field name made lowercase.
    custlastname = models.CharField(db_column='custLastName', max_length=45)  # Field name made lowercase.
    custfirstname = models.CharField(db_column='custFirstName', max_length=45)  # Field name made lowercase.
    custemail = models.CharField(db_column='custEmail', max_length=45)  # Field name made lowercase.
    custpassword = models.CharField(db_column='custPassword', max_length=16)  # Field name made lowercase.
    custadd = models.CharField(db_column='custAdd', max_length=45)  # Field name made lowercase.
    custzip = models.CharField(db_column='custZip', max_length=45)  # Field name made lowercase.
    custnum = models.CharField(db_column='custNum', max_length=45)  # Field name made lowercase.
    custabout = models.CharField(db_column='custAbout', max_length=100, blank=True, null=True)  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'customer'


class DjangoAdminLog(models.Model):
    action_time = models.DateTimeField()
    object_id = models.TextField(blank=True, null=True)
    object_repr = models.CharField(max_length=200)
    action_flag = models.SmallIntegerField()
    change_message = models.TextField()
    content_type_id = models.IntegerField(blank=True, null=True)
    user_id = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'django_admin_log'


class DjangoContentType(models.Model):
    app_label = models.CharField(max_length=100)
    model = models.CharField(max_length=100)

    class Meta:
        managed = False
        db_table = 'django_content_type'
        unique_together = (('app_label', 'model'),)


class DjangoMigrations(models.Model):
    app = models.CharField(max_length=255)
    name = models.CharField(max_length=255)
    applied = models.DateTimeField()

    class Meta:
        managed = False
        db_table = 'django_migrations'


class DjangoSession(models.Model):
    session_key = models.CharField(primary_key=True, max_length=40)
    session_data = models.TextField()
    expire_date = models.DateTimeField()

    class Meta:
        managed = False
        db_table = 'django_session'


class Request(models.Model):
    reqid = models.AutoField(db_column='reqID', primary_key=True)  # Field name made lowercase.
    reqstatus = models.CharField(db_column='reqStatus', max_length=8)  # Field name made lowercase.
    pettype = models.CharField(max_length=3)
    petbreed = models.CharField(max_length=60)
    custid = models.ForeignKey(Customer, models.DO_NOTHING, db_column='custID')  # Field name made lowercase.
    servid = models.ForeignKey('Services', models.DO_NOTHING, db_column='servID')  # Field name made lowercase.
    spid = models.ForeignKey('ServiceProvider', models.DO_NOTHING, db_column='spID')  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'request'


class Reviewrating(models.Model):
    rr_id = models.IntegerField(db_column='rr_ID')  # Field name made lowercase.
    revmessage = models.CharField(max_length=10000)
    rating = models.IntegerField()
    spid = models.ForeignKey('ServiceProvider', models.DO_NOTHING, db_column='spid')
    custid = models.ForeignKey(Customer, models.DO_NOTHING, db_column='custid')
    reviewer = models.CharField(max_length=45)

    class Meta:
        managed = False
        db_table = 'reviewrating'


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
    spday = models.CharField(db_column='spDay', max_length=10, blank=True, null=True)  # Field name made lowercase.
    sptime = models.CharField(db_column='spTime', max_length=45, blank=True, null=True)  # Field name made lowercase.
    spreqstatus = models.CharField(db_column='spReqStatus', max_length=5)  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'service_provider'
        
    def __str__(self):
        return '%s %s' % (self.spfirstname, self.splastname)

class Services(models.Model):
    servid = models.AutoField(db_column='servID', primary_key=True)  # Field name made lowercase.
    servname = models.CharField(db_column='servName', max_length=45)  # Field name made lowercase.
    servprice = models.IntegerField(db_column='servPrice')  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'services'
    def __str__(self):
        return self.servname


class Ssp(models.Model):
    servid = models.ForeignKey(ServiceProvider, models.DO_NOTHING, db_column='servID', primary_key=True)  # Field name made lowercase.
    spid = models.IntegerField(db_column='spID')  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'ssp'
        unique_together = (('servid', 'spid'),)


class Transaction(models.Model):
    trans = models.ForeignKey(ServiceProvider, models.DO_NOTHING, db_column='trans_ID', primary_key=True)  # Field name made lowercase.
    transstatus = models.CharField(db_column='transStatus', max_length=8)  # Field name made lowercase.
    transdate = models.DateField(db_column='transDate')  # Field name made lowercase.
    timein = models.TimeField(db_column='timeIn')  # Field name made lowercase.
    timeout = models.TimeField(db_column='timeOut')  # Field name made lowercase.
    payment = models.IntegerField()
    paystatus = models.CharField(db_column='payStatus', max_length=12)  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'transaction'
