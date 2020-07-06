(function () {
    var image_id = 'course-image';
    var title_id = 'course-title';
    var description_id = 'course-description';

    var rgb = getAverageRGB(document.getElementById(image_id));
    var color = invertColor(rgb, true);

    setColorAndShadow(title_id,color,' 0px 4px 3px');
    setColorAndShadow(description_id,color,' 0px 2px 3px');
    function setColorAndShadow(id,color,shadow) {
        document.getElementById(id).style.color=color;
        document.getElementById(id).style.textShadow=(color === '#2b2b2b' ? 'darkgrey' : '#000') + shadow;
    }
    function invertColor(rgb, bw) {

        var r = rgb.r,
            g = rgb.g,
            b = rgb.b;
        if (bw) {
            return (r * 0.299 + g * 0.587 + b * 0.114) > 186
                ? '#2b2b2b'
                : '#FFFFFF';
        }
        // invert color components
        r = (255 - r).toString(16);
        g = (255 - g).toString(16);
        b = (255 - b).toString(16);
        return "#" + padZero(r) + padZero(g) + padZero(b);
    }

    function getAverageRGB(imgEl) {

        var blockSize = 5,
            defaultRGB = {r: 0, g: 0, b: 0},
            canvas = document.createElement('canvas'),
            context = canvas.getContext && canvas.getContext('2d'),
            data, width, height,
            i = -4,
            length,
            rgb = {r: 0, g: 0, b: 0},
            count = 0;

        if (!context) {
            return defaultRGB;
        }

        height = canvas.height = imgEl.naturalHeight || imgEl.offsetHeight || imgEl.height;
        width = canvas.width = imgEl.naturalWidth || imgEl.offsetWidth || imgEl.width;

        context.drawImage(imgEl, 0, 0);

        try {
            data = context.getImageData(0, 0, width, height);
        } catch (e) {
            return defaultRGB;
        }

        length = data.data.length;

        while ((i += blockSize * 4) < length) {
            ++count;
            rgb.r += data.data[i];
            rgb.g += data.data[i + 1];
            rgb.b += data.data[i + 2];
        }

        rgb.r = ~~(rgb.r / count);
        rgb.g = ~~(rgb.g / count);
        rgb.b = ~~(rgb.b / count);

        return rgb;

    }
})();