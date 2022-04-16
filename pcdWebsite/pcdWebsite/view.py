from django.shortcuts import render
import pickle as pk
import numpy as np
from django.http import HttpResponseRedirect
from django.shortcuts import render
from django.core.files.storage import FileSystemStorage
import cv2
import tensorflow as tf
import os
from pathlib import Path
from pcdWebsite.settings import BASE_DIR, MEDIA_ROOT

def upload(request):
    if request.method == 'POST' and request.FILES['upload']:
        upload = request.FILES['upload']
        fss = FileSystemStorage()
        file = fss.save(upload.name, upload)
        file_url = fss.url(file)
        ## Labeling 
        class_label = ["Covid-19", "Normal", "Pneumonia"]
        ## Model Deployment
        model =  tf.keras.models.load_model('cxr_model.h5')
        ## Dir image
        dir_image = os.path.join(MEDIA_ROOT, file)
        img = cv2.imread(dir_image)
        img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
        img = cv2.resize(img, (128, 128))
        img = np.array(img)
        img = img.reshape(1, 128, 128, 3)
        predict = class_label[np.argmax(model.predict(img))]
        return render(request, 'home.php', {'file_url': file_url, 'result' : predict})
    return render(request, 'home.php')

def home(request):
    return render(request,"home.php")

def result(imgPath):
    class_label = ["Covid 19", "Normal", "Pneumonia"]
    model =  pk.load(open('cxr_model.h5', 'rb'))
    img = cv2.imread(imgPath)
    img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
    img = cv2.resize(img, (128, 128))
    img = np.array(img)
    img = img.reshape(1, 128, 128, 3)
    predict = class_label[np.argmax(model.predict(img))]
    return predict