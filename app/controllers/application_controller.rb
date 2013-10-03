class ApplicationController < ActionController::Base
  # Prevent CSRF attacks by raising an exception.
  # For APIs, you may want to use :null_session instead.
  protect_from_forgery with: :exception

  before_filter :variables_define

  def variables_define
    @all_pages = Page.all
    @all_posts = Post.all
  end


end
