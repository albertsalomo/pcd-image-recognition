<!DOCTYPE html>
{% if theme %}
<html lang="en" data-theme="{{ theme }}">
{% else %}
<html lang="en" data-theme="">
{% endif %}

<head>
    {% include "header.php" %}
    <title>Content | CMS</title>
</head>

<body class="w-100 color-and-bg-color-3">
    {% include "navbar.php" %}
    {% load static %}

    <div class="container">
        <h4 style="margin-top: 3rem; text-align: center;">ARTICLE</h4>
        <hr>
        <p style="text-align: justify;">
            Severe Acute Respiratory Syndrome Corona virus 2 (SARS-COV-2) also known as COVID-19 has been emerged asa pandemic
            throughout the globe recently. Chest X-ray (CXR) scans play an important role in the diagnosis of the corona virus.
            A deep multi-layered convolution neural network (CNN) has been proposed to detect COVID-19 accurately from CXR scans.
        </p>

        <div class="d-flex justify-content-center pb-3">
            <img src="{% static 'pcdWebsite/images/journal/fig1.png' %}" alt="">
        </div>

        <p style="text-align: justify;">
            First the non-uniform images have been scaled to maintain uniformity. Then the scaled images have been used as input to
            the proposed deep multi-layered CNN structure. Finally, the output layer performs the classification task.
        </p>

        <div class="d-flex justify-content-center pb-3">
            <img src="{% static 'pcdWebsite/images/journal/fig2.png' %}" alt="">
        </div>

        <p style="text-align: justify;">
            The proposed deep multi-layered CNN having 5 layers has been elaborated in Fig. 2. Convolution operations of
            3 x 3 kernels have been performed in each layer with unit stride sliding window and single padding. Rectified linear unit
            (ReLU) [11] has been used as the activation function. A 2 x 2 max pooling operation has also been performed to utilize the results
            of convolution operation from each layer into a more compact tensor. In the proposed technique, the three dimensional tensors have
            been converted to one dimensional feature vectors consisting 4096 neurons after the multi-layered structure. Thereafter, a dense layer
            of 128 neurons, a dropout layer consisting 50% dropout rate and an output layer consisting 3 neurons have been used. ReLU and Softmax has
            been used as activation functions in dense layer and output layer respectively.
        </p>

        <p style="text-align: justify;">
            The probabilities of each class have been evaluated in the output layer of the proposed multi-layered CNN structure. A specific output
            node (Logit) having the highest probability value represents the classification of the corresponding class. A first order gradient-based
            optimization process known as Adam optimizer [12] has been used in the training phase of the proposed methodology to optimize the training process.
        </p>

        <p style="text-align: justify;">
            The proposed methodology has been implemented on 1330 images of COVID-19 cases,
            1330 images of pneumonia cases and 1330 images of normal cases. The dataset has been split into training, validation and blind
            test sets in the ratio of 80 : 10 : 10. To make the dataset balanced, 1330 CXR images of COVID-19, 1330 CXR images of Pneumonia and 1330
            CXR images of Normal cases has been used from all the data sources.
        </p>

        <p style="text-align: center;"> The dataset has been splitted in 80%, 10% and 10% for training, validation and testing.</p>

        <div class="d-flex justify-content-center pb-3">
            <img src="{% static 'pcdWebsite/images/journal/algorithm.png' %}" alt="">
        </div>

        <p style="text-align: justify;">
            The CNN model has been implemented using Python3 and the Keras packages using Tensorflow2 on an AMD Ryzen 5 2400G (4 Cores, 8 Threads)
            CPU, NVIDIA RTX 2060 graphics card (6GB DDR6 VRAM, 192 bits), 16GB DDR4 RAM clocked at 3000mHz, 480 GB SSD (SATA Interface).
        </p>

        <p style="text-align: justify;">
            Validation and testing have been performed on 3192, 399 and 399 images respectively.
            The test set has been evaluated as blind testing i.e. the test images have never been used for training and validation purpose.
            This blind testing formulation makes the proposed system more robust. The 10 fold training and validation performance has been shown in
            Fig. 4. A 10-fold CV training accuracy of 99.5 (±0.001)%,
            10-fold cross validation accuracy of 97.6 (±0.011)% and blind test accuracy of 99.1% have been achieved by the proposed technique.
        </p>

        <div class="d-flex justify-content-center pb-3">
            <img src="{% static 'pcdWebsite/images/journal/fig4.png' %}" alt="">
        </div>

        <p style="text-align: center;">The classification results have further been reconfirmed by precision, recall and f1 score in Table I.</p>

        <div class="d-flex justify-content-center pb-3">
            <img src="{% static 'pcdWebsite/images/journal/table1.png' %}" alt="">
        </div>

        <div class="d-flex justify-content-center pb-3">
            <img src="{% static 'pcdWebsite/images/journal/table2.png' %}" alt="">
        </div>

        <div class="d-flex justify-content-center pb-3">
            <img src="{% static 'pcdWebsite/images/journal/fig5.png' %}" alt="">
        </div>

        <p style="text-align: justify;">
            A light weight multi-layered CNN architecture has been proposed to detect and classify CXR images of COVID-19 patients.
            10-fold cross validation technique and blind testing have been performed in the proposed methodology to make the system more robust.
            A blind test accuracy of 99.1% has been obtained by the proposed technique. Therefore, the proposed methodology can be used as a second
            opinion for medical professionals with their diagnostic prediction of COVID-19. The data augmentation using Generative
            Adversarial Network can be used in future to increase the number of training images for better classification performance.
        </p>

        <p style="text-align: center;">© Bhadra, R., & Kar, S. (2020, December). <b>Covid detection from cxr scans using deep multi-layered cnn. In 2020 IEEE Bombay Section Signature Conference</b> (IBSSC) (pp. 214-218). IEEE.</p>
    </div>
</body>

</html>