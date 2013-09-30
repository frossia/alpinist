class PagesController < ApplicationController

  def index
    redirect_to :posts
  end

end
