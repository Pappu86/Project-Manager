export const showModal = function (instance, component, data, onHidden, callback) {

    let id = makeId();
    instance.elements.push({component: component, props: {id: id, data: data}});

    $('#' + id).parent().show();

    setTimeout(function () {
        $('#' + id).modal('show');


        $('#' + id).on('hidden.bs.modal', function () {
            $('#' + id).remove();

            if(onHidden) onHidden(id);
        });
    }, 200);

    if(callback) callback(id);

}

const makeId = function () {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

    for (var i = 0; i < 5; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));

    return text;
}
