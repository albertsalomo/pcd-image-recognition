<!DOCTYPE html>
{% if theme %}
<html lang="en" data-theme="{{ theme }}">
{% else %}
<html lang="en" data-theme="">
{% endif %}

<head>
    {% include "header.php" %}
    <title>Scan History | CMS</title>
</head>

<body class="w-100 color-and-bg-color-3">
    {% include "navbar.php" %}
    <h4 class="pt-5" style="text-align: center; padding-bottom: 5%">SCAN HISTORY</h4>
    <div class="p-2">
        <table class="w-100" style="border-collapse: collapse;" id="scanHistCont">
            <tr>
                <th class="p-2 color-and-bg-color-4" style="border: 1px solid var(--color-8);">No.</th>
                <th class="p-2 color-and-bg-color-4" style="border: 1px solid var(--color-8);">Image</th>
                <th class="p-2 color-and-bg-color-4" style="border: 1px solid var(--color-8);">Model</th>
                <th class="p-2 color-and-bg-color-4" style="border: 1px solid var(--color-8);">Date</th>
                <th class="p-2 color-and-bg-color-4" style="border: 1px solid var(--color-8);">Result</th>
                <th class="p-2 color-and-bg-color-4" style="border: 1px solid var(--color-8);">Action</th>
            </tr>
            {% for history in history_list %}
            <tr class="scan-history">
                <td class="p-2" style="border: 1px solid var(--color-8);">{{ forloop.counter }}</td>
                <td class="p-2" style="border: 1px solid var(--color-8);"><img style="width:100%; height:100%; max-width:100px" src="media/{{ history.img_name }}" alt=""></td>
                <td class="p-2" style="border: 1px solid var(--color-8);">{{ history.model }}</td>
                <td class="p-2" style="border: 1px solid var(--color-8);">{{ history.date }}</td>
                <td class="p-2" style="border: 1px solid var(--color-8);">{{ history.result }}</td>
                <td class="p-2" style="border: 1px solid var(--color-8);">
                    <button class="w-100 color-and-bg-color-1 style-1 rounded delete-btn" data-id="{{ history.id }}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </td>
            </tr>
            {% endfor %}
        </table>
    </div>


</body>

</html>