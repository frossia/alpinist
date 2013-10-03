class PagesController < ApplicationController

  def index
    redirect_to :posts
  end

  def show
    @page = Page.find(params[:id])
  end

end
