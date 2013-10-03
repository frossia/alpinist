ActiveAdmin.register Page do
  menu :label => "Страницы"

  index do
    column :title
    #column :body
  #  column :last_sign_in_at
  #  column :sign_in_count
    default_actions
  end

  show do
    h1 page.title
    div do
      page.body.html_safe
    end
  end


  #
  #filter :email
  #
  form do |f|
    f.inputs "Параметры страницы" do
      f.input :title, :label => "Название страницы"
      f.input :menu_title, :label => "Название в меню"
      f.input :full_size, :label => "Показать на всю ширину страницы"
      f.input :published, :label => "Опубликовано"
    end
    f.inputs "Текст страницы" do
      f.input :body, :input_html => { :class => "tinymce_editor" }
    end
    f.actions
  end

  controller do
    def permitted_params
      params.permit(:page => [:title, :body, :menu_title, :full_size, :published])
    end
  end

end