mergeInto(LibraryManager.library, {

  assignValues: function (name,values) {
    document.querySelector('input[name="'+UTF8ToString(name)+'"]').value = UTF8ToString(values);
  },
  submitForm: function () {
    document.getElementById("myForm").submit();
  },

});