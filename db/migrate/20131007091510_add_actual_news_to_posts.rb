class AddActualNewsToPosts < ActiveRecord::Migration
  def change
    add_column :posts, :actual_news, :boolean, :default => false
  end
end
