"""pcdWebsite URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from pcdWebsite import view
from django.contrib import admin
from django.urls import path
from django.conf import settings  # add this
from django.conf.urls.static import static  # add this

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', view.home, name='home'),
    path('upload', view.upload, name='upload'),
    path('settheme', view.settheme),
    path('gettheme', view.gettheme),
    path('scan', view.scan, name='scan'),
    path('aboutus', view.aboutus, name='aboutus'),
    path('content', view.content, name='content')
] + static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
