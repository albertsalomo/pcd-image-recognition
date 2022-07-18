from django.db import models


class Scan_Result (models.Model):
    id = models.IntegerField(primary_key=True)
    img_name = models.CharField(max_length=256)
    model = models.CharField(max_length=30)
    date = models.DateField()
    result = models.CharField()

    class Meta:
        app_label = 'pcdWebsite'
