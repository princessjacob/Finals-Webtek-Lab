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


class Customer(models.Model):
    custid = models.ForeignKey('Services', models.DO_NOTHING, db_column='custID', primary_key=True)  # Field name made lowercase.
    custname = models.CharField(db_column='custName', max_length=45)  # Field name made lowercase.
    custadd = models.CharField(db_column='custAdd', max_length=45)  # Field name made lowercase.
    custnum = models.IntegerField(db_column='custNum')  # Field name made lowercase.
    custemail = models.CharField(db_column='custEmail', max_length=45)  # Field name made lowercase.

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


class Pets(models.Model):
    petbreed = models.CharField(primary_key=True, max_length=45)
    pettype = models.CharField(max_length=45, blank=True, null=True)
    cust = models.ForeignKey(Customer, models.DO_NOTHING, blank=True, null=True)

    class Meta:
        managed = False
        db_table = 'pets'


class Request(models.Model):
    reqid = models.AutoField(db_column='reqID', primary_key=True)  # Field name made lowercase.
    reqstatus = models.CharField(db_column='reqStatus', max_length=45)  # Field name made lowercase.
    reqdets = models.CharField(db_column='reqDets', max_length=45)  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'request'


class Reviewrating(models.Model):
    rr = models.ForeignKey('ServiceProvider', models.DO_NOTHING, db_column='rr_ID', primary_key=True)  # Field name made lowercase.
    revdets = models.CharField(db_column='revDets', max_length=45)  # Field name made lowercase.
    rating = models.IntegerField()

    class Meta:
        managed = False
        db_table = 'reviewrating'


class ServiceProvider(models.Model):
    spid = models.ForeignKey('Transaction', models.DO_NOTHING, db_column='spID', primary_key=True)  # Field name made lowercase.
    spname = models.CharField(db_column='spName', max_length=45)  # Field name made lowercase.
    spadd = models.CharField(db_column='spAdd', max_length=45)  # Field name made lowercase.
    spnum = models.IntegerField(db_column='spNum')  # Field name made lowercase.
    spemail = models.CharField(db_column='spEmail', max_length=45)  # Field name made lowercase.
    spstatus = models.CharField(db_column='spStatus', max_length=45)  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'service_provider'


class Services(models.Model):
    servid = models.ForeignKey('Transaction', models.DO_NOTHING, db_column='servID', primary_key=True)  # Field name made lowercase.
    servname = models.CharField(db_column='servName', max_length=45)  # Field name made lowercase.
    servdesc = models.CharField(db_column='servDesc', max_length=45)  # Field name made lowercase.
    servprice = models.IntegerField(db_column='servPrice')  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'services'


class Ssp(models.Model):
    servid = models.ForeignKey(ServiceProvider, models.DO_NOTHING, db_column='servID', primary_key=True)  # Field name made lowercase.
    spid = models.IntegerField(db_column='spID')  # Field name made lowercase.

    class Meta:
        managed = False
        db_table = 'ssp'
        unique_together = (('servid', 'spid'),)


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
