ActiveAdmin.register Page do
  menu :label => "Страницы"

  index :title => 'Страницы' do
    column :title
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
      f.input :show_in_menu, :label => "Показать в меню"
      f.input :showtitle, :label => "Показать заголовок статьи"

      #f.input :in_side_menu, :label => "Ссылка в боковом меню"
      #f.input :full_size, :label => "Показать на всю ширину страницы"
      #f.input :published, :label => "Опубликовано"
    end
    f.inputs "Текст страницы" do
      f.cktext_area :body
    end
    f.actions
  end

  controller do
    def permitted_params
      params.permit(:page => [:title, :body, :menu_title, :full_size, :published, :in_side_menu, :showtitle, :show_in_menu])
    end
  end

  filter :title

end