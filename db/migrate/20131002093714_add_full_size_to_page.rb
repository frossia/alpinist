class AddFullSizeToPage < ActiveRecord::Migration
  def change
    add_column :pages, :full_size, :boolean
  end
end
