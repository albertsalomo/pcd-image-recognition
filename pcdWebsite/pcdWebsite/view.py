import datetime
from django.shortcuts import render
import pickle as pk
import numpy as np
from django.http import HttpResponse
from django.shortcuts import render
from django.core.files.storage import FileSystemStorage
import cv2
import tensorflow as tf
import os
from pcdWebsite.models import Scan_Result
from pcdWebsite.settings import BASE_DIR, MEDIA_ROOT


def upload(request):
    if request.method == 'POST' and len(request.FILES) != 0:
        upload = request.FILES['upload']
        model = request.POST['model']

        if(upload.name.split('.')[-1] in ['jpg', 'jpeg', 'png']):
            if (model in ['cxr_model_vgg16.h5', 'cxr_model_cnn_fixed.h5']):
                todayDate = datetime.date.today().strftime('%Y-%m-%d')
                Scan_Result.objects.create(
                    img_name='tmp', model=model.split('.')[0], result='tmp', date=todayDate)
                fss = FileSystemStorage()
                file = fss.save(upload.name, upload)
                file_url = fss.url(file)
                # Labeling
                class_label = ["Covid-19", "Normal", "Pneumonia"]
                # Model Deployment
                model = tf.keras.models.load_model(model)
                # Dir image
                dir_image = os.path.join(MEDIA_ROOT, file)
                img = cv2.imread(dir_image)
                img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
                img = cv2.resize(img, (128, 128))
                img = np.array(img)
                img = img.reshape(1, 128, 128, 3)
                predict = class_label[np.argmax(model.predict(img))]

                id = Scan_Result.objects.latest('id').id
                file_name = 'scan-' + str(id) + '.' + \
                    upload.name.split('.')[-1]
                scanResult = Scan_Result.objects.get(id=id)
                scanResult.img_name = file_name
                scanResult.result = predict
                scanResult.save()

                if (request.COOKIES.get('theme')):
                    theme = request.COOKIES.get('theme')
                    return render(request, 'scan.php', {'file_url': file_url, 'result': predict, 'theme': theme})
                else:
                    return render(request, 'scan.php', {'file_url': file_url, 'result': predict})
            else:
                if (request.COOKIES.get('theme')):
                    theme = request.COOKIES.get('theme')
                    return render(request, 'scan.php', {'theme': theme, 'error': 'Selected model is invalid'})
                else:
                    return render(request, 'scan.php', {'error': 'Selected model is invalid'})
        else:
            if (request.COOKIES.get('theme')):
                theme = request.COOKIES.get('theme')
                return render(request, 'scan.php', {'theme': theme, 'error': 'File is not valid'})
            else:
                return render(request, 'scan.php', {'error': 'File is not valid'})
    if (request.COOKIES.get('theme')):
        theme = request.COOKIES.get('theme')
        return render(request, 'scan.php', {'theme': theme, 'error': 'There is no uploaded file'})
    else:
        return render(request, 'scan.php', {'error': 'There is no uploaded file'})


def home(request):
    if (request.COOKIES.get('theme')):
        theme = request.COOKIES['theme']
        return render(request, "home.php", {'theme': theme})
    else:
        return render(request, "home.php")


def scan(request):
    if (request.COOKIES.get('theme')):
        theme = request.COOKIES['theme']
        return render(request, "scan.php", {'theme': theme})
    else:
        return render(request, "scan.php")


def aboutus(request):
    if (request.COOKIES.get('theme')):
        theme = request.COOKIES['theme']
        return render(request, "aboutus.php", {'theme': theme})
    else:
        return render(request, "aboutus.php")


def content(request):
    if (request.COOKIES.get('theme')):
        theme = request.COOKIES['theme']
        return render(request, "content.php", {'theme': theme})
    else:
        return render(request, "content.php")


def settheme(request):
    if request.method == 'GET':
        theme = request.GET.get('theme')
        max_age = 14*24*60*60

        expires = datetime.datetime.strftime(datetime.datetime.utcnow()
                                             + datetime.timedelta(seconds=max_age), "%a, %d-%b-%Y %H:%M:%S GMT")

        response = HttpResponse('Theme changed.')
        response.set_cookie('theme', theme, max_age=max_age, expires=expires)
        return response


def gettheme(request):
    if request.method == 'GET':
        if request.COOKIES.get('theme'):
            theme = request.COOKIES.get('theme')
            jsonData = '{"theme": "'+theme+'"}'
            response = HttpResponse(jsonData)
        else:
            jsonData = '{"theme": ""}'
            response = HttpResponse(jsonData)
        return response


def result(imgPath):
    class_label = ["Covid 19", "Normal", "Pneumonia"]
    model = pk.load(open('cxr_model2.h5', 'rb'))
    img = cv2.imread(imgPath)
    img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
    img = cv2.resize(img, (128, 128))
    img = np.array(img)
    img = img.reshape(1, 128, 128, 3)
    predict = class_label[np.argmax(model.predict(img))]
    return predict
