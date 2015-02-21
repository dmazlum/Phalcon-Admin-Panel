/* HTML 5 Canvas Images */
    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    var src = canvas.getAttribute("src");

    img = new Image();
    img.onload = function () {

        canvas.height = canvas.width * (img.height / img.width);

        /// step 1
        var oc = document.createElement('canvas'),
            octx = oc.getContext('2d');

        oc.width = img.width * 0.5;
        oc.height = img.height * 0.5;
        octx.drawImage(img, 0, 0, oc.width, oc.height);

        /// step 2
        octx.drawImage(oc, 0, 0, oc.width * 0.5, oc.height * 0.5);

        ctx.drawImage(oc, 0, 0, oc.width * 0.5, oc.height * 0.5,
            0, 0, canvas.width, canvas.height);
    }
    img.src = src;
