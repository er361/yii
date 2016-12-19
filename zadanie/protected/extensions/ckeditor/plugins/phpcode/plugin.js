/**
 * Created by Erbol on 13.12.2016.
 */
CKEDITOR.plugins.add('phpcode',{
    init: function (editor) {

        console.log('start');
        //styles
        var pluginDirectory = this.path;
        editor.addContentsCss( pluginDirectory + 'styles/style.css' );

        //commands
        //fio
        editor.addCommand('insertFIO',{
            exec: function(editor){
                editor.insertHtml('<span class="delete"> Ф.И.О </span>');
                editor.insertHtml(
                        '&nbsp' +
                        '<span class="code">' +
                        '<?php echo $model->name; ?>' +
                        '&nbsp' +
                        '<?php echo $model->familia; ?>' +
                        '&nbsp' +
                        '<?php echo $model->otchestvo; ?>'+
                        '</span>'+
                        '&nbsp'
                );
            }
        });

        //birthdate
        editor.addCommand('insertBirthdate',{
           exec: function (editor) {
               editor.insertHtml('<span class="delete"> Дата рождения </span>');
               editor.insertHtml(
                   '&nbsp' +
                   '<span class="code">' +
                    '<?php echo $model->birthdate; ?>'
                   +'</span>'
                    + '&nbsp'
               );
           }
        });

        //adress
        editor.addCommand('insertAddress',{
            exec: function (editor) {
                editor.insertHtml('<span class="delete"> Адрес </span>');
                editor.insertHtml(
                    '&nbsp' +
                    '<span class="code">' +
                    '<?php echo $model->address; ?>'
                    +'</span>'
                    + '&nbsp');
            }
        });
        //nationality
        editor.addCommand('insertNationality',{
            exec: function (editor) {
                editor.insertHtml('<span class="delete"> Национальность </span>');
                editor.insertHtml(
                    '&nbsp' +
                    '<span class="code">' +
                    '<?php echo $model->nationality; ?>'
                    +'</span>'
                    + '&nbsp');
            }
        });
        //id
        editor.addCommand('insertId',{
            exec: function (editor) {
                editor.insertHtml('<span class="delete"> Номер уд. личности </span>');
                editor.insertHtml(
                    '&nbsp' +
                    '<span class="code">' +
                    '<?php echo $model->id; ?>'
                    +'</span>'
                    + '&nbsp');
            }
        });

        //buttons
        //FIO
        editor.ui.addButton('fio',{
            label: 'ФИО',
            command: 'insertFIO',
            toolbar: 'userdata'
        });

        //birthdate
        editor.ui.addButton('bd',{
            label: 'Дата рождения',
            command: 'insertBirthdate',
            toolbar: 'userdata'
        });
        //id
        editor.ui.addButton('id',{
            label: 'Номер уд. личности',
            command: 'insertId',
            toolbar: 'userdata'
        });
        //address
        editor.ui.addButton('address',{
            label: 'Адресс',
            command: 'insertAddress',
            toolbar: 'userdata'
        });
        //nationality
        editor.ui.addButton('nat',{
            label: 'Национальность',
            command: 'insertNationality',
            toolbar: 'userdata'
        });
    }
});