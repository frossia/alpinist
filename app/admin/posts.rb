ActiveAdmin.register Post do
  menu :label => "Новости"

  index :title => 'Новости' do
    column :title
    default_actions
  end

  show do
    h1 post.title
    div do
      post.body.html_safe
    end
  end


  form do |f|
    f.inputs "Параметры страницы" do
      f.input :title, :label => "Название страницы"
      f.input :actual_news, :label => "Актуальная новость"
    end
    f.inputs "Текст страницы" do
      f.cktext_area :body
    end
    f.actions
  end

  controller do
    #...
    def permitted_params
      params.permit(:post => [:title, :body, :actual_news])
    end
  end

end