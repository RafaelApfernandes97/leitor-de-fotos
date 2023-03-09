
                function toggleCheckbox(img) {
                    var checkbox = img.nextElementSibling;
                    if (checkbox.checked) {
                        checkbox.checked = false;
                        img.style = "opacity: 10";
                    } else {
                        checkbox.checked = true;
                        img.style = "opacity: 0.5";
                    }
                }
            