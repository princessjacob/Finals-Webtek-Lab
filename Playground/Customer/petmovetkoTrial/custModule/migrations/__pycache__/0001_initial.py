# -*- coding: utf-8 -*-
# Generated by Django 1.11 on 2017-05-06 19:15
from __future__ import unicode_literals

from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='AuthGroup',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=80, unique=True)),
            ],
            options={
                'db_table': 'auth_group',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='AuthGroupPermissions',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('group_id', models.IntegerField()),
                ('permission_id', models.IntegerField()),
            ],
            options={
                'db_table': 'auth_group_permissions',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='AuthPermission',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=255)),
                ('content_type_id', models.IntegerField()),
                ('codename', models.CharField(max_length=100)),
            ],
            options={
                'db_table': 'auth_permission',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='AuthUser',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('password', models.CharField(max_length=128)),
                ('last_login', models.DateTimeField(blank=True, null=True)),
                ('is_superuser', models.IntegerField()),
                ('username', models.CharField(max_length=150, unique=True)),
                ('first_name', models.CharField(max_length=30)),
                ('last_name', models.CharField(max_length=30)),
                ('email', models.CharField(max_length=254)),
                ('is_staff', models.IntegerField()),
                ('is_active', models.IntegerField()),
                ('date_joined', models.DateTimeField()),
            ],
            options={
                'db_table': 'auth_user',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='AuthUserGroups',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('user_id', models.IntegerField()),
                ('group_id', models.IntegerField()),
            ],
            options={
                'db_table': 'auth_user_groups',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='AuthUserUserPermissions',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('user_id', models.IntegerField()),
                ('permission_id', models.IntegerField()),
            ],
            options={
                'db_table': 'auth_user_user_permissions',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Customer',
            fields=[
                ('custid', models.AutoField(db_column='custID', primary_key=True, serialize=False)),
                ('custlastname', models.CharField(db_column='custLastName', max_length=45)),
                ('custfirstname', models.CharField(db_column='custFirstName', max_length=45)),
                ('custemail', models.CharField(db_column='custEmail', max_length=45)),
                ('custpassword', models.CharField(db_column='custPassword', max_length=16)),
                ('custadd', models.CharField(db_column='custAdd', max_length=45)),
                ('custnum', models.CharField(db_column='custNum', max_length=45)),
                ('custphoto', models.TextField(blank=True, db_column='custPhoto', null=True)),
            ],
            options={
                'db_table': 'customer',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='DjangoAdminLog',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('action_time', models.DateTimeField()),
                ('object_id', models.TextField(blank=True, null=True)),
                ('object_repr', models.CharField(max_length=200)),
                ('action_flag', models.SmallIntegerField()),
                ('change_message', models.TextField()),
                ('content_type_id', models.IntegerField(blank=True, null=True)),
                ('user_id', models.IntegerField()),
            ],
            options={
                'db_table': 'django_admin_log',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='DjangoContentType',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('app_label', models.CharField(max_length=100)),
                ('model', models.CharField(max_length=100)),
            ],
            options={
                'db_table': 'django_content_type',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='DjangoMigrations',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('app', models.CharField(max_length=255)),
                ('name', models.CharField(max_length=255)),
                ('applied', models.DateTimeField()),
            ],
            options={
                'db_table': 'django_migrations',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='DjangoSession',
            fields=[
                ('session_key', models.CharField(max_length=40, primary_key=True, serialize=False)),
                ('session_data', models.TextField()),
                ('expire_date', models.DateTimeField()),
            ],
            options={
                'db_table': 'django_session',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Petlist',
            fields=[
                ('petid', models.IntegerField(db_column='petID', primary_key=True, serialize=False)),
                ('type', models.CharField(max_length=45)),
                ('breed', models.CharField(max_length=45)),
            ],
            options={
                'db_table': 'petlist',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Petowner',
            fields=[
                ('owner', models.IntegerField(primary_key=True, serialize=False)),
                ('pet', models.IntegerField()),
            ],
            options={
                'db_table': 'petowner',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Request',
            fields=[
                ('reqid', models.AutoField(db_column='reqID', primary_key=True, serialize=False)),
                ('reqstatus', models.CharField(db_column='reqStatus', max_length=45)),
                ('reqdets', models.CharField(db_column='reqDets', max_length=45)),
            ],
            options={
                'db_table': 'request',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='ServiceProvider',
            fields=[
                ('spid', models.AutoField(db_column='spID', primary_key=True, serialize=False)),
                ('spusername', models.CharField(db_column='spUsername', max_length=45)),
                ('splastname', models.CharField(db_column='spLastName', max_length=45)),
                ('spfirstname', models.CharField(db_column='spFirstName', max_length=45)),
                ('spemail', models.CharField(db_column='spEmail', max_length=45)),
                ('sppassword', models.CharField(db_column='spPassword', max_length=16)),
                ('spadd', models.CharField(db_column='spAdd', max_length=45)),
                ('spnum', models.IntegerField(db_column='spNum')),
                ('sppet', models.CharField(db_column='spPet', max_length=20)),
                ('spzip', models.IntegerField(db_column='spZip')),
                ('splastlogged', models.DateField(db_column='spLastLogged')),
                ('spstatus', models.CharField(db_column='spStatus', max_length=45)),
                ('spservices', models.CharField(db_column='spServices', max_length=45)),
                ('spday', models.CharField(db_column='spDay', max_length=10)),
                ('sptime', models.DateTimeField(db_column='spTime')),
            ],
            options={
                'db_table': 'service_provider',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Services',
            fields=[
                ('servid', models.AutoField(db_column='servID', primary_key=True, serialize=False)),
                ('servname', models.CharField(db_column='servName', max_length=45)),
                ('servprice', models.IntegerField(db_column='servPrice')),
                ('servimage', models.TextField(db_column='servImage')),
            ],
            options={
                'db_table': 'services',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Reviewrating',
            fields=[
                ('rr', models.ForeignKey(db_column='rr_ID', on_delete=django.db.models.deletion.DO_NOTHING, primary_key=True, serialize=False, to='custModule.ServiceProvider')),
                ('revdets', models.CharField(db_column='revDets', max_length=45)),
                ('rating', models.IntegerField()),
            ],
            options={
                'db_table': 'reviewrating',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Ssp',
            fields=[
                ('servid', models.ForeignKey(db_column='servID', on_delete=django.db.models.deletion.DO_NOTHING, primary_key=True, serialize=False, to='custModule.ServiceProvider')),
                ('spid', models.IntegerField(db_column='spID')),
            ],
            options={
                'db_table': 'ssp',
                'managed': False,
            },
        ),
        migrations.CreateModel(
            name='Transaction',
            fields=[
                ('trans', models.ForeignKey(db_column='trans_ID', on_delete=django.db.models.deletion.DO_NOTHING, primary_key=True, serialize=False, to='custModule.ServiceProvider')),
                ('transstatus', models.CharField(db_column='transStatus', max_length=45)),
                ('transdate', models.DateField(db_column='transDate')),
                ('timestart', models.CharField(db_column='timeStart', max_length=45)),
                ('timein', models.CharField(db_column='timeIn', max_length=45)),
                ('payment', models.IntegerField()),
                ('paystatus', models.CharField(db_column='payStatus', max_length=45)),
            ],
            options={
                'db_table': 'transaction',
                'managed': False,
            },
        ),
    ]