# -*- coding: utf-8 -*-
# Generated by Django 1.11 on 2017-04-30 12:17
from __future__ import unicode_literals

from django.conf import settings
from django.db import migrations, models
import django.db.models.deletion


class Migration(migrations.Migration):

    initial = True

    dependencies = [
        migrations.swappable_dependency(settings.AUTH_USER_MODEL),
    ]

    operations = [
        migrations.CreateModel(
            name='Trial',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('command', models.TextField(help_text='Enter command to remember', max_length=300)),
                ('os', models.CharField(blank=True, choices=[('A', 'Any'), ('L', 'Linux'), ('M', 'Mac'), ('W', 'Windows'), ('O', 'O')], max_length=1)),
                ('version', models.CharField(blank=True, help_text='Version command works on', max_length=20)),
                ('note', models.TextField(blank=True, help_text='Any info on command', max_length=500)),
                ('user', models.ForeignKey(on_delete=django.db.models.deletion.CASCADE, to=settings.AUTH_USER_MODEL)),
            ],
        ),
    ]
