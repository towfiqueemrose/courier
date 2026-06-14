import os
import glob
import re

directories = [
    'local-courier-service', 'expressday', 'terms-and-conditions',
    'cash-on-delivery-service', 'online-parcel-delivery-service',
    'nextday', 'about-us', 'home-delivery-service', 'why-choose-us',
    'ecommerce-courier-service', 'faq-web', 'service-and-express',
    'package-tracking', 'sameday', 'service-areas', 'logistics-services'
]

pattern = re.compile(
    r'\s*<div class="row">\s*<hr style="border: none;margin-top: 35px;">\s*<div class="col-sm-12 visible-md visible-lg".*?<div class="collapse" id="collapseExample">.*?</div>\s*</div>\s*</div>',
    re.DOTALL
)

for d in directories:
    file_path = os.path.join(d, 'index.html')
    if os.path.exists(file_path):
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
        
        new_content = pattern.sub('', content)
        
        if content != new_content:
            with open(file_path, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Updated {file_path}")
        else:
            print(f"Pattern not found in {file_path}")

