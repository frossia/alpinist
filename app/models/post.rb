class Post < ActiveRecord::Base

  scope :actual, -> { where(:actual_news => true) }

end
