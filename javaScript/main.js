


window.onload = function() {
    var latitude = 9.310281115888737;
    var longitude =  42.11694450640272;

    var mapUrl = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.148380230757!2d' + longitude + '!3d' + latitude + '!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1623ecf5f8d7772f%3A0xe7d2c0f2151a2d36!2sHarar%20Secondary%20School!5e0!3m2!1sen!2set!4v1648561227289!5m2!1sen!2set';

    document.getElementById('google-map').src = mapUrl;
};
