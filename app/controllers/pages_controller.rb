class PagesController < ApplicationController

  def index
    redirect_to :root
  end

  def show
    @page = Page.find(params[:id])
  end

end
